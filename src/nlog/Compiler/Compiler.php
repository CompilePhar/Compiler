<?php

namespace nlog\Compiler;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\command\ConsoleCommandSender;

class Compiler extends PluginBase implements Listener {

  public function onEnable() {
	$this->getServer()->getPluginManager()->registerEvents($this, $this);
	
	$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "makeserver");
  }
  
}

?>