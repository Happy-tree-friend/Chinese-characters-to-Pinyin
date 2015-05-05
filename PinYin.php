<?php
/****
 * @package PinYin
 * @author SK_YLove <79852394@qq.com>
 * @copyright 2015
 * PHP >= 5.4.0, PECL intl >= 2.0.0
 * PHP自5.4.0起,自带了transliterator_transliterate函数,以前写汉字转拼音类就删除掉了.
 * transliterator_transliterate ( mixed $transliterator , string $subject [, int $start [, int $end ]] )
 ***/

var_dump(transliterator_transliterate('Any-Latin; Latin-ASCII;', "测试文字"));
