<?php
/*
递归：
你打开面前这扇门，看到屋里面还有一扇门（这门可能跟前面打开的门一样大小（静），也可能门小了些（动）），你走过去，发现手中的钥匙还可以打开它，你推开门，发现里面还有一扇门，你继续打开，。。。， 若干次之后，你打开面前一扇门，发现只有一间屋子，没有门了。 你开始原路返回，每走回一间屋子，你数一次，走到入口的时候，你可以回答出你到底用这钥匙开了几扇门。

循环：
你打开面前这扇门，看到屋里面还有一扇门，（这门可能跟前面打开的门一样大小（静），也可能门小了些（动）），你走过去，发现手中的钥匙还可以打开它，你推开门，发现里面还有一扇门，（前面门如果一样，这门也是一样，第二扇门如果相比第一扇门变小了，这扇门也比第二扇门变小了（动静如一，要么没有变化，要么同样的变化）），你继续打开这扇门，。。。，一直这样走下去。 入口处的人始终等不到你回去告诉他答案。
 */
/**
 * 递归算法
 *   边界条件、前进段、返回段
 *   当边界条件不满足时，递归前进；当边界条件满足时，递归返回。
 *   递归就是有去（递去）有回（归来）。 
 * @param  $n 
 * @return $n
 */
function test($n)
{
	echo $n. '&nbsp;&nbsp;'; //①初始化的值 3
	if($n > 0)
	{
		test($n - 1);	//②3-1=2调用自身， 2-1=1调用自身， 1-1=0 
	}else
	{
		echo '---------- '; //③$n=0的时候执行else
	}
	echo $n. '&nbsp;&nbsp;'; //④执行完else输出这里
	return;
}
test(2);