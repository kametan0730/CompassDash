<?php
namespace kametan;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\math\Vector3;
class CompassDash extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	public function onPlayerInteract(PlayerInteractEvent $event){
		$player = $event->getPlayer();
		if($player->getInventory()->getItemInHand()->getID() === 345){
			if($player->onGround){
				$player->setMotion(new Vector3((-sin($player->yaw/180*M_PI))*2,0.3,(cos($player->yaw/180*M_PI))*2));
			}
		}
	}
}