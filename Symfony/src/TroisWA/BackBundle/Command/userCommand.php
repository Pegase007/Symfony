<?php
namespace TroisWA\BackBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use TroisWA\BackBundle\Entity\User;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;

class userCommand extends ContainerAwareCommand
{
    protected function configure()
    {

        $this->setName('user:create')
            ->setDescription('allows to create users')

            ->addArgument('login',InputArgument::REQUIRED,'Quel est le login')
            ->addArgument('password',InputArgument::REQUIRED,'Quel est le password');


    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        //Recuperation de Doctrine
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        $login = $input->getArgument('login');
        $password = $input->getArgument('password');

        $user= new User();

        //On recupere tout ce qui est dans config encoders
        $factory= $this->getContainer()->get('security.encoder_factory');
        //Je récupère l'encoder de la class TroisWA\BackBundle\Entity\User
        $encoder = $factory->getEncoder($user);
        $newPassword = $encoder->encodePassword($password, $user->getSalt());

        $faker = \Faker\Factory::create('fr_FR');
        $user->setFirstName($faker->firstName);
        $user->setLastName($faker->lastName );
        $user->setEmail($faker->email);
        $user->setGender($faker->randomFloat(0, 0,1 ));
        $user->setAddress($faker->streetAddress);
        $user->setPhone($faker->phoneNumber);
        $user->setCity($faker->city);
        $user->setPc($faker->postcode);
        $user->setCountry($faker->country);
        $user->setLogin($login);
        $user->setPassword($newPassword);

        $em->persist($user);
        $em->flush();








    }


}
//
//// green text
//$output->writeln('<info>foo</info>');
//
//// yellow text
//$output->writeln('<comment>foo</comment>');
//
//// black text on a cyan background
//$output->writeln('<question>foo</question>');
//
//// white text on a red background
//$output->writeln('<error>foo</error>');
//
//// green text
//$output->writeln('<fg=green>foo</>');
//
//// black text on a cyan background
//$output->writeln('<fg=black;bg=cyan>foo</>');
//
//// bold text on a yellow background
//$output->writeln('<bg=yellow;options=bold>foo</>');
//
//http://symfony.com/doc/master/components/console/introduction.html