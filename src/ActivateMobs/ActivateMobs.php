<?php

namespace ActivateMobs;

use pocketmine\level\Position;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\level\Level;
use pocketmine\item\Item;
use pocketmine\block\Block;
use pocketmine\Player;
use pocketmine\math\vector3;
use pocketmine\entity\Zombie;
use pocketmine\level\format\FullChunk;
use pocketmine\scheduler\CallbackTask;
use pocketmine\nbt\tag\Compound;
use pocketmine\nbt\tag\Double;
use pocketmine\nbt\tag\Enum;
use pocketmine\nbt\tag\Float;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\player\PlayerItemHeldEvent;
use pocketmine\event\block\BlockPlaceEvent;
use pocketmine\scheduler\TaskHandler;

use ActivateMobs\Entities\Passive\Chicken;
use ActivateMobs\Entities\Passive\Cow;
use ActivateMobs\Entities\Passive\Pig;
use ActivateMobs\Entities\Passive\Sheep;
use ActivateMobs\Entities\Passive\Wolf;
use ActivateMobs\Entities\Passive\Mooshroom;
use ActivateMobs\Entities\Passive\Bat;

use ActivateMobs\Entities\Hostile\Creeper;
use ActivateMobs\Entities\Hostile\Skeleton;
use ActivateMobs\Entities\Hostile\Spider;
use ActivateMobs\Entities\Hostile\PigZombie;
use ActivateMobs\Entities\Hostile\Slime;
use ActivateMobs\Entities\Hostile\Enderman;
use ActivateMobs\Entities\Hostile\Silverfish;

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
