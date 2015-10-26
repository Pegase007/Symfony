<?php
namespace TroisWA\BackBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MyCommand extends ContainerAwareCommand
{
    protected function configure()
    {

        $this->setName('mycommand:test')
            ->setDescription('permet de faire une commande de test')
//            ->addArgument('nomcommande-prenom',InputArgument::OPTIONAL,'Contenu-Veuillez entrer votre prénom')
//            ->addOption('color','raccourci',InputOption::VALUE_NONE,'permet de mettre de la couleur');

            ->addArgument('id',InputArgument::REQUIRED,'Quel est lid')
            ->addOption('color','c',InputOption::VALUE_OPTIONAL,'permet de mettre de la couleur');


    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {


        //Recuperation de Doctrine
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        $id = $input->getArgument('id');
        $color = $input->getOption('color');

        $product=$em->getRepository('TroisWABackBundle:Product')->fiveQuantity($qty = 5);


//        // Récupération d'un argument
//        $prenom = $input->getArgument('nomcommande-prenom');

        // Récupération d'une option
//        $optionColor = $input->getOption('color');



//        //hello
//        die(dump($product));
        foreach($product as $prod)
        {

            $output->writeln('<comment>Titre : </comment><fg='.$color.'>'.$prod->getTitle());
        }

//        // Récupération du service mail
//        $this->getContainer()->get('mailer')


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