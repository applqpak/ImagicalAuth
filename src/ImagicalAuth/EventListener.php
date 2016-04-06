<?php

  namespace ImagicalAuth;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\utils\TextFormat as TF;
  use pocketmine\event\player\PlayerJoinEvent;

  class EventListener extends PluginBase implements Listener
  {

    public function __construct(Main $plugin)
    {

      $this->plugin = $plugin;

    }

    public function onJoin(PlayerJoinEvent $event)
    {

    }

  }

?>
