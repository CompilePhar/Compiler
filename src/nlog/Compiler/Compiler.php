<?php

namespace nlog\Compiler;

use pocketmine\plugin\PluginBase;
use pocketmine\command\ConsoleCommandSender;

class Compiler extends PluginBase {
  public function onEnable() {
	$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "makeserver");
	$this->getServer()->dispatchCommand(new ConsoleCommandSender(), "stop");
  }
}

?>
