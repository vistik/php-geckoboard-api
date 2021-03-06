<?php
namespace CarlosIO\Geckoboard\Widgets;

use CarlosIO\Geckoboard\Data\ListWidget\Label;
use CarlosIO\Geckoboard\Data\ListWidget\Title;

class ListWidget extends Widget
{

    protected $items;

    public function addItem(Title $title, Label $label, $description){
        $count = count($this->items);
        $this->items[$count]['title'] = $title->toArray();
        $this->items[$count]['label'] = $label->toArray();
        $this->items[$count]['description'] = $description;
    }

    /**
     * {@inheritdoc}
     */
    public function getData()
    {
        if (count($this->items) > 0){
            return $this->items;
        } else{
            $this->items[]['title'] = array();
            $this->items[]['label'] = array();
            $this->items[]['description'] = '';
            return $this->items;
        }
    }

    /**
     * @return array
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * @return array
     */
    public function getTitles()
    {
        return $this->titles;
    }

    /**
     * @return array
     */
    public function getDescriptions()
    {
        return $this->descriptions;
    }
}