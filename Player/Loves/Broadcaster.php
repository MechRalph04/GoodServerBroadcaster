<?php

namespace Broadcaster;

use pocketmine\plugin\PluginBase
use pocketmine\command\CommandSender
use pocketmine\command\Command
use pocketmine\Player

class Broadcaster extends PluginBase{

           public function onLoad(){
                     $this->getLogger()->info("Plugin Loading");
          
