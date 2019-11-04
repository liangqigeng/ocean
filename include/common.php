<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/10/29
 * Time: 23:19
 */
 //查询配置信息
    $logo = $db->select_one('config','*','con_id = 1');
    $location = $db->select_one('config','*','con_id = 2');
    $people = $db->select_one('config','*','con_id = 3');
    $phone = $db->select_one('config','*','con_id = 4');
    $tel = $db->select_one('config','*','con_id = 7');
    $icp = $db->select_one('config','*','con_id = 5');
    $web = $db->select_one('config','*','con_id = 6');
    //查询导航
    $nav = $db->select_all('nav','*','1 ORDER BY nav_ord ASC');
    $nav2 = $db->select_one('banner','*','banner_id = 2');
    $nav3= $db->select_one('banner','*','banner_id = 6');
    $nav4= $db->select_one('banner','*','banner_id = 4');
    $tip = $db->select_one('page','*','page_id = 8');
    $tip2 = $db->select_one('page','*','page_id = 9');
