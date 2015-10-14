<?php

namespace ActivateMobs\Entities\Passive;

use pocketmine\network\Network;
use pocketmine\network\protocol\AddEntityPacket;
use pocketmine\Player;
use pocketmine\entity\Animal;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\item\Item as ItemItem;

class Mooshroom extends Animals{
  const NETWORK_ID = 16;

public function __construct($chunk, $nbt){
  parent::__construct($chunk, $nbt){

  $this->width = 1;
  $this->length = 0.9;
  $this->height = 1;
}

public function getName(){
  return "Mooshroom";
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
