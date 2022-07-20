<?php
class PluginGoogleSearch{
  public function widget_form($data){
    /**
     * 
     */
    wfPlugin::includeonce('wf/yml');
    $data = new PluginWfArray($data);
    /**
     * validate
     */
    if(!$data->get('data/id')){
      throw new Exception(__CLASS__.' says: Param data/id is not set!');
    }
    /**
     * src
     */
    $src = "https://cse.google.com/cse.js?cx=".$data->get('data/id');
    /**
     * element
     */
    $element = new PluginWfYml(__DIR__.'/element/widget_form.yml');
    $element->setByTag(array('src' => $src));
    wfDocument::renderElement($element);
  }
}