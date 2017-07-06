<?php

/*
 * Merdiven v1.0
 * MCPETRCoderTim
 */

namespace M\S;

use pocketmine\event\player\cheat\PlayerIllegalMoveEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info("§aMerdiven Aktif!");
	}

   public function offEvent(PlayerIllegalMoveEvent $e){
    $e->setCancelled();
    }

}