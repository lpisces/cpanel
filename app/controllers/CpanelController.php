<?php

class CpanelController extends ControllerBase
{

  public function initialize()
  {
    $this->view->setVar("is_cpanel", TRUE);
    include '../app/config/site.php';
    $this->view->setVar("site_name", $site['name']);
    $this->view->setVar("title", $site['title']);
    $this->view->setVar("keywords", $site['keywords']);
    $this->view->setVar("description", $site['description']);

    include '../app/config/menu.php';
    $this->view->setVar("menu", $menu);
  }
}

