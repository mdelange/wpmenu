<?php
/**
 * Menu helpers for WordPress, based on Timber\Menu
 *
 * @see https://timber.github.io/docs/guides/menus/
 */

if (!function_exists('menu_items')) {
    /**
     * @param  slug, id, theme location or name (admin).
     *         Pass nothing if you have one menu.
     * @return many useful properties, e.g.
     *         - id, url, title, current
     *         - class, classes
     *         - children, current_item_parent, current_item_ancestor
     *         - post_date, post_modified, post_modified_gmt
     *         - post_author (author id)
     *         - object_type (post type)
     *         - status
     *         - comment_status, comment_count
     */
    function menu_items(string|int|null $arg=null, array $options=[]): array
    {
        return (new Timber\Menu($arg, $options))->items;
    }
}

if (!function_exists('menu_item')) {
    /**
     * @param string
     * @param integer
     */
    function menu_item(string|int|null $menu_arg, int $index=0): Timber\MenuItem|null
    {
        $items = menu_items($menu_arg);
        return $items[$index] ?? null;
    }
}