<?php

namespace SeaPhp\SimpleProject\Command;

use SeaPhp\SimpleProject\Calculator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class AddComand extends Command {

  protected function configure() {
    $this
      ->setName('add')
      ->setDescription('Add numbers')
      ->addArgument(
        'number', InputArgument::IS_ARRAY, 'A number to add.'
      )
    ;
  }

  protected function execute(InputInterface $input, OutputInterface $output) {
    if ($numbers = $input->getArgument('number')) {
      $calc = new Calculator(0);
      foreach ($numbers as $number) {
        $calc->add($number);
      }
      $output->writeln($calc->getResult());
    }
    else {
      $output->writeln('No numbers to add.');
    }
  }

}
