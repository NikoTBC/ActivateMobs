<?php

namespace ActivateMobs;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\Double;
use pocketmine\nbt\tag\Float;
use pocketmine\nbt\tag\Entity;
use pocketmine\item\Item;
use pocketmine\event\entity\EntitySpawnEvent;
use pocketmine\utils\Config;
use pocketmine\utils\Utils;

use ActivateMobs\Entities\Cow;

class ActivateMobs extends PluginBase implements Listener{

public function onLoad(){
  $this->getLogger()->info("Loading the mobs...");
}

public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getLogger()->info("Successfully Enabled");
}

public function onDisable(){
  $this->getLogger()->info("Successfully Disabled");
 }
}

?>
