<?php

namespace Broadcaster;

use pocketmine\plugin\PluginBase;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;

class Broadcaster extends PluginBase{
    public function onCommand(CommandSender $sender, Command $command, $label, array $args){
        switch($command->getName())
        case

