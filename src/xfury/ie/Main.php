<?php
namespace xfury\ie;

use pocketmine\plugin\PluginBase as P;
use pocketmine\utils\TextFormat  as Color;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\event\Listener as L;
use pocketmine\Player;
use pocketmine\item\Item;
use pocketmine\entity\Effect;
use pocketmine\event\player\PlayerItemHeldEvent;

class Main extends P implements L{
 
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this,$this);
		$this->saveDefaultConfig();
		$this->getServer()->getLogger()->info(Color::GREEN."[IE] ".Color::AQUA."ItemEffects v2.5.0 successfully enabled!");
	}
	
	//Item Effects on Interact
	public function onPlayerInteractEvent(PlayerInteractEvent $e){
		$p = $e->getPlayer();
		//Item1
		if($e->getItem()->getId() == $this->getConfig()->get("id1")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id1-eff1"))->setDuration($this->getConfig()->get("id1-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id1-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
                        if($this->getConfig()->exists($e->getItem()->getId() . ":" . $meta){
                          $effects = $this->getConfig()->get($e->getItem()->getId() . ":" . $meta);
                        }
                        $p->addEffect($effects);
			$item = Item::get($this->getConfig()->get("id1"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id1-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id1-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id1-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id1-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id1-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id1-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//Item 2	
		if($e->getItem()->getId() == $this->getConfig()->get("id2")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id2-eff1"))->setDuration($this->getConfig()->get("id2-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id2-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id2"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id2-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id2-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id2-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id2-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id2-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id2-msg"));
				return true;
			}
			else{
				return true;
			}
		}	
		//Item 3
		if($e->getItem()->getId() == $this->getConfig()->get("id3")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id3-eff1"))->setDuration($this->getConfig()->get("id3-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id3-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id3"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id3-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id3-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id3-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id3-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id3-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id3-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//item 4
		if($e->getItem()->getId() == $this->getConfig()->get("id4")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id4-eff1"))->setDuration($this->getConfig()->get("id4-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id4-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id4"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id4-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id4-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id4-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id4-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id4-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id4-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//item 5
		if($e->getItem()->getId() == $this->getConfig()->get("id5")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id5-eff1"))->setDuration($this->getConfig()->get("id5-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id5-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id5"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id5-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id5-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id5-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id5-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id5-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id5-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 6
		if($e->getItem()->getId() == $this->getConfig()->get("id6")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id6-eff1"))->setDuration($this->getConfig()->get("id6-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id6-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id6"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id6-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id6-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id6-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id6-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id6-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id6-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 7
		if($e->getItem()->getId() == $this->getConfig()->get("id7")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id7-eff1"))->setDuration($this->getConfig()->get("id7-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id7-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id7"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id7-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id7-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id7-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id7-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id7-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id7-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 8
		if($e->getItem()->getId() == $this->getConfig()->get("id8")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id8-eff1"))->setDuration($this->getConfig()->get("id8-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id8-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id8"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id8-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id8-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id8-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id8-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id8-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id8-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 9
		if($e->getItem()->getId() == $this->getConfig()->get("id9")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id9-eff1"))->setDuration($this->getConfig()->get("id9-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id9-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id9"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id9-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id9-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id9-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id9-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id9-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id9-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 10
		if($e->getItem()->getId() == $this->getConfig()->get("id10")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id10-eff1"))->setDuration($this->getConfig()->get("id10-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id10-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id10"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id10-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id10-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id10-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id10-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id10-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id10-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 11
		if($e->getItem()->getId() == $this->getConfig()->get("id11")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id11-eff1"))->setDuration($this->getConfig()->get("id11-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id11-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id11"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id11-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id11-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id11-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id11-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id11-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id11-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 12
		if($e->getItem()->getId() == $this->getConfig()->get("id12")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id12-eff1"))->setDuration($this->getConfig()->get("id12-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id12-eff1-amp"));
			$p->addEffect($eff1);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id12"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id12-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id12-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id12-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id12-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id12-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id12-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 13
		if($e->getItem()->getId() == $this->getConfig()->get("id13")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id13-eff1"))->setDuration($this->getConfig()->get("id13-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id13-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("id13-eff2"))->setDuration($this->getConfig()->get("id13-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("id13-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("id13-eff3"))->setDuration($this->getConfig()->get("id13-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("id13-eff3-amp"));
			$p->addEffect($eff3);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id13"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id13-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id13-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id13-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id13-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id13-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id13-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 14
		if($e->getItem()->getId() == $this->getConfig()->get("id14")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id14-eff1"))->setDuration($this->getConfig()->get("id14-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id14-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("id14-eff2"))->setDuration($this->getConfig()->get("id14-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("id14-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("id14-eff3"))->setDuration($this->getConfig()->get("id14-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("id14-eff3-amp"));
			$p->addEffect($eff3);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id14"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id14-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id14-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id14-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id14-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id14-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id14-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 15
		if($e->getItem()->getId() == $this->getConfig()->get("id15")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id15-eff1"))->setDuration($this->getConfig()->get("id15-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id15-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("id15-eff2"))->setDuration($this->getConfig()->get("id15-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("id15-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("id15-eff3"))->setDuration($this->getConfig()->get("id15-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("id15-eff3-amp"));
			$p->addEffect($eff3);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id15"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id15-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id15-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id15-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id15-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id15-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id15-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 16
		if($e->getItem()->getId() == $this->getConfig()->get("id16")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id16-eff1"))->setDuration($this->getConfig()->get("id16-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id16-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("id16-eff2"))->setDuration($this->getConfig()->get("id16-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("id16-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("id16-eff3"))->setDuration($this->getConfig()->get("id16-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("id16-eff3-amp"));
			$p->addEffect($eff3);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id16"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id16-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id16-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id16-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id16-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id16-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id16-msg"));
				return true;
			}
			else{
				return true;
			}
		}
 //Item 17
		if($e->getItem()->getId() == $this->getConfig()->get("id17")){
			$eff1 = Effect::getEffect($this->getConfig()->get("id17-eff1"))->setDuration($this->getConfig()->get("id17-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("id17-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("id17-eff2"))->setDuration($this->getConfig()->get("id17-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("id17-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("id17-eff3"))->setDuration($this->getConfig()->get("id17-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("id17-eff3-amp"));
			$p->addEffect($eff3);
			$meta = $e->getItem()->getDamage();
			$item = Item::get($this->getConfig()->get("id17"), $meta, 1);
			$p->getInventory()->removeItem($item);
			if($this->getConfig()->get("id17-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("id17-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id17-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("id17-msg"));
				return true;
			}
			elseif($this->getConfig()->get("id17-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("id17-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//Block1
		if($e->getBlock()->getId() == $this->getConfig()->get("block-id1")){
			$eff1 = Effect::getEffect($this->getConfig()->get("block-id1-eff1"))->setDuration($this->getConfig()->get("block-id1-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("block-id1-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("block-id1-eff2"))->setDuration($this->getConfig()->get("block-id1-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("block-id1-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("block-id1-eff3"))->setDuration($this->getConfig()->get("block-id1-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("block-id1-eff3-amp"));
			$p->addEffect($eff3);
			if($this->getConfig()->get("block-id1-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("block-id1-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id1-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("block-id1-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id1-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("block-id1-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//Block2
		if($e->getBlock()->getId() == $this->getConfig()->get("block-id2")){
			$eff1 = Effect::getEffect($this->getConfig()->get("block-id2-eff1"))->setDuration($this->getConfig()->get("block-id2-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("block-id2-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("block-id2-eff2"))->setDuration($this->getConfig()->get("block-id2-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("block-id2-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("block-id2-eff3"))->setDuration($this->getConfig()->get("block-id2-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("block-id2-eff3-amp"));
			$p->addEffect($eff3);
			if($this->getConfig()->get("block-id2-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("block-id2-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id2-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("block-id2-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id2-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("block-id2-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//Block3
		if($e->getBlock()->getId() == $this->getConfig()->get("block-id3")){
			$eff1 = Effect::getEffect($this->getConfig()->get("block-id3-eff1"))->setDuration($this->getConfig()->get("block-id3-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("block-id3-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("block-id3-eff2"))->setDuration($this->getConfig()->get("block-id3-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("block-id3-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("block-id3-eff3"))->setDuration($this->getConfig()->get("block-id3-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("block-id3-eff3-amp"));
			$p->addEffect($eff3);
			if($this->getConfig()->get("block-id3-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("block-id3-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id3-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("block-id3-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id3-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("block-id3-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//Block4
		if($e->getBlock()->getId() == $this->getConfig()->get("block-id4")){
			$eff1 = Effect::getEffect($this->getConfig()->get("block-id4-eff1"))->setDuration($this->getConfig()->get("block-id4-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("block-id4-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("block-id4-eff2"))->setDuration($this->getConfig()->get("block-id4-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("block-id4-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("block-id4-eff3"))->setDuration($this->getConfig()->get("block-id4-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("block-id4-eff3-amp"));
			$p->addEffect($eff3);
			if($this->getConfig()->get("block-id4-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("block-id4-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id4-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("block-id4-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id4-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("block-id4-msg"));
				return true;
			}
			else{
				return true;
			}
		}
		//Block5
		if($e->getBlock()->getId() == $this->getConfig()->get("block-id5")){
			$eff1 = Effect::getEffect($this->getConfig()->get("block-id5-eff1"))->setDuration($this->getConfig()->get("block-id5-eff1-dur") * 20)->setAmplifier($this->getConfig()->get("block-id5-eff1-amp"));
			$p->addEffect($eff1);
			$eff2 = Effect::getEffect($this->getConfig()->get("block-id5-eff2"))->setDuration($this->getConfig()->get("block-id5-eff2-dur") * 20)->setAmplifier($this->getConfig()->get("block-id5-eff2-amp"));
			$p->addEffect($eff2);
			$eff3 = Effect::getEffect($this->getConfig()->get("block-id5-eff3"))->setDuration($this->getConfig()->get("block-id5-eff3-dur") * 20)->setAmplifier($this->getConfig()->get("block-id5-eff3-amp"));
			$p->addEffect($eff3);
			if($this->getConfig()->get("block-id5-msg-type") == "chat"){
				$p->sendMessage($this->getConfig()->get("block-id5-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id5-msg-type") == "popup"){
				$p->sendPopup($this->getConfig()->get("block-id5-msg"));
				return true;
			}
			elseif($this->getConfig()->get("block-id5-msg-type") == "tip"){
				$p->sendTip($this->getConfig()->get("block-id5-msg"));
				return true;
			}
			else{
				return true;
			}
		}
	}
}
