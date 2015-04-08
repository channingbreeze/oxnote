<p>“今天在网上看了一个视频，一个人玩贪吃蛇，把所有格子都占满了，太牛了。”，玩命牛和欣欣分享他看过的视频。</p>
<p>“哦，这个视频我也看过，确实挺厉害的，能把游戏玩到极致也是一种能力呀。”，欣欣表示赞同。</p>
<p>“嗯，我自己玩的时候每次占了一半格子就玩不下去，蛇的速度实在太快了，如果能让它变慢点就好了。”，玩命牛歪歪到。</p>
<p>“这个简单呀，你自己做一个贪吃蛇自己练习就好啦！”，欣欣说到。</p>
<p>“额，这个我可没想过，自己做一个游戏啊，完全没思路！”，玩命牛不敢相信自己的耳朵。</p>
<p>“没什么难的，不是学了JavaScript么，学了就要用，不然就等于白学了。你好好分析一下贪吃蛇游戏的规则，看看要用到什么知识点，然后自己去搞定那些知识点就好了。”，欣欣说到。</p>
<p>“我想想……，首先要有上下左右控制，所以要响应按键，然后蛇每隔一定时间就向前走一步，所以要有一个每隔一定时间触发的事件吧，然后就是要随机产生一些食物，再就是要有一个地图……”，玩命牛认真分析着。</p>
<p>“嗯，基本都分析到了，<b>响应键盘用JavaScript监听键盘事件就好，每隔一定时间来触发动作，可以用setInterval函数，随机数可以用Math.ramdon，地图就用二维数组就行</b>。还有一点需要注意，蛇身是动态增长的，所以还需要知道怎么<b>动态增加DOM元素</b>。”，欣欣一一点破奥秘。</p>
<p>“哦，听上去好像也不难，ok，我这就去试试！”，玩命牛向贪吃蛇游戏发起了挑战。</p>
<div class="note_director">本文笔记在<a href="notedetail-html-8.html" target="_blank.html">这里</a>。</div>