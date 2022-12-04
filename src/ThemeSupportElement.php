<?php

namespace Intimation\Catalyst;

class ThemeSupportElement extends Element
{
    const ADD = 'add';
    const REMOVE = 'remove';

    public function init()
    {
        if (array_key_exists(self::REMOVE, $this->config)) {
            $this->remove($this->config[self::REMOVE]);
        }

        if (array_key_exists(self::ADD, $this->config)) {
            $this->add($this->config[self::ADD]);
        }
    }

    protected function add(array $items)
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/
         */
        array_map('add_theme_support', array_keys($items), $items);
    }

    protected function remove(array $items)
    {
        /**
         * @link https://developer.wordpress.org/reference/functions/remove_theme_support/
         */
        array_map('remove_theme_support', $items);
    }
}
