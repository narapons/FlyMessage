<?php

namespace FlyMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerToggleFlightEvent;

class main extends PluginBase implements Listener
{
    public function FlyMessage(PlayerToggleFlightEvent $ev)
    {
        $player = $ev->getPlayer();
        if ($ev->isFlying()) {
            if(!$player->isOp()){
            $this->getServer()->getPluginManager()->registerEvents($this, $this); 
            $name = $player->getName();
            $this-> getServer()->broadcastMessage("§d【警告】 §f{$name}§dがFlyを使用しました");
            }
        }
    }
}
