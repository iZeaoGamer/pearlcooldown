<?php

namespace ARTulloss;

use pocketmine\Player;
use pocketmine\scheduler\PluginTask;
use pocketmine\item\Item;

class Delay extends PluginTask {

    public $player;

    public function __construct(Plugin $plugin, Player $player){
        $this->player = $player;
		parent::__construct($plugin);
    }

    public function onRun(int $ticks) : void{
		$this->player->getInventory()->addItem(Item::get(368));
		$this->getOwner()->getServer()->getScheduler()->cancelTask($this->getTaskId());
    }
}