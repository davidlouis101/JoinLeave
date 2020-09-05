<?php

namespace JoinLeave;

use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getlogger()->info("JoinLeave by Crow Balde");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onPlayerJoin(PlayerJoinEvent $event)
    {
        $player = $event->getPlayer();
        $event->setJoinMessage("§9§lLamaflow§7»»§6 Der §7 " . $player . " §6hat denn Server Betreten");
    }

    public function onPlayerQuit(PlayerQuitEvent $event)
    {
        $player = $event->getPlayer();
        $event->setQuitMessage("§9§lLamaflow§7»»§6 Der §7" . $player . " §6hat denn Server Verlassen");
    }

}
