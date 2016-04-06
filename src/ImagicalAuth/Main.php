<?php

  namespace ImagicalAuth;

  use pocketmine\plugin\PluginBase;
  use pocketmine\event\Listener;
  use pocketmine\utils\Config;
  use pocketmine\utils\TextFormat as TF;

  class Main extends PluginBase
  {

    public function dataPath()
    {

      return $this->getDataFolder();

    }

    public function server()
    {

      return $this->getServer();

    }

    public function pluginManager()
    {

      return $this->server()->getPluginManager();

    }

    public function onEnable()
    {

      @mkdir($this->dataPath());

      $this->cfg = new Config($this->dataPath() . "config.yml". Config::YAML, array());

      $this->server()->pluginManager()->registerEvents(new EventListener($this), $this);

    }

    public function hashPassword($password)
    {

      $hashedPassword = md5(sha1(md5(sha1($password))));

      if($hashedPassword)
      {

        return $hashedPassword;

      }
      else
      {

        return false;

      }

    }

    public function verifyPasswordHash($hash, $password)
    {

      $hashedPassword = md5(sha1(md5(sha1($password))));

      if($hashedPassword === $hash)
      {

        return true;

      }
      else
      {

        return false;

      }

    }

  }

?>
