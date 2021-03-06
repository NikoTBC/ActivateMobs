<?php

namespace ActivateMobs\Entities\Hostile;

use pocketmine\network\Network;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\Player;
use pocketmine\entity\Monster;
use pocketmine\entity\Living;
use pocketmine\item\Item as ItemItem;

class Slime extends Monster implements Living{
  const NETWORK_ID = 37;

public function __construct($chunk, $nbt){
  parent::__construct($chunk, $nbt){

  $this->width = 0.6;
  $this->length = 0.6;
  $this->height = 1.8;
}

public function getName(){
  return "Slime";
}

public function spawnTo(Player, $player){

  $pk = new AddEntityPacket();
  $pk->eid = $this->getId();
  $pk->type = self::NETWORK_ID;
  $pk->x = $this->x;
  $pk->y = $this->y;
  $pk->z = $this->z;
  $pk->speedX = $this->motionX;
  $pk->speedY = $this->motionY;
  $pk->speedZ = $this->motionZ;
  $pk->yaw = $this->yaw;
  $pk->pitch = $this->pitch;
  $pk->metadata = $this->dataProperties;
  $player->dataPacket($pk);

  parent::spawnTo($player);
  }
 }
}

?>
