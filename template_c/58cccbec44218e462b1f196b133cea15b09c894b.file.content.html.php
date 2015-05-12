<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 21:22:49
         compiled from "C:\PS\web\server2go\htdocs\template\content.html" */ ?>
<?php /*%%SmartyHeaderCode:7201553e5d444ee067-77992725%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58cccbec44218e462b1f196b133cea15b09c894b' => 
    array (
      0 => 'C:\\PS\\web\\server2go\\htdocs\\template\\content.html',
      1 => 1431458458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7201553e5d444ee067-77992725',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553e5d444eef97_93465165',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553e5d444eef97_93465165')) {function content_553e5d444eef97_93465165($_smarty_tpl) {?><div class="content">
  <h1>Тег &lt;canvas&gt;</h1>
  <div class="num_comments">
    <a href="#">комментариев: 36</a>
  </div> 
  <table class="browser">
    <tr class="br">
      <td><span class="ie">Internet Explorer</span></td>
      <td><span class="cr">Chrome</span></td>
      <td><span class="op">Opera</span></td>
      <td><span class="sa">Safari</span></td>
      <td><span class="fx">Firefox</span></td>
      <td><span class="an">Android</span></td>
      <td><span class="ip">iOS</span></td>
    </tr>
    <tr class="sp">
      <td class="yes"><span>9.0+</span></td>
      <td class="yes"><span>6.0+</span></td>
      <td class="yes"><span>9.6+</span></td>
      <td class="yes"><span>3.1+</span></td>
      <td class="yes"><span>4.0+</span></td>
      <td class="yes"><span>2.1+</span></td>
      <td class="yes"><span>3.0+</span></td>
    </tr>
  </table>
  <h3>Спецификация</h3>
  <table class="standart">
    <tr>
      <td class="h">HTML:</td>
      <td class="no">3.2</td>
      <td class="no">4.01</td>
      <td class="yes">5.0</td>
      <td class="xh">XHTML:</td>
      <td class="no">1.0</td>
      <td class="no">1.1</td>
    </tr>
  </table>
  <h3>Описание</h3>
  <p>Создает область, в которой при помощи JavaScript можно  рисовать разные объекты, выводить изображения, трансформировать их и менять  свойства. При помощи тега <span class="tag">&lt;canvas&gt;</span> можно создавать рисунки, анимацию,  игры и др.</p>
  <h3>Синтаксис</h3>
  <pre><code class="no-buttons"><span class="tag">&lt;<span class="title">canvas</span><span class="attribute"> id=<span class="value">"идентификатор"</span></span>&gt;</span>
<span class="tag">&lt;/<span class="title">canvas</span>&gt;</span></code></pre>
  <h3>Атрибуты</h3>
  <dl class="param">
    <dt>height</dt>
    <dd>Задает высоту холста. По умолчанию 300 пикселов.</dd>
    <dt>width</dt>
    <dd>Задает ширину холста. По умолчанию 150 пикселов.</dd>
  </dl>
  <p>Также для этого тега доступны <a href="#">универсальные атрибуты</a> и <a href="#">события</a>.</p>
  <h3>Закрывающий тег</h3>
  <p> Обязателен.</p>
  <p class="exampleTitle">Пример</p>
  <p class="example">
    <span class="html yes">HTML5</span><span class="no">IE 8</span><span class="yes">IE 9</span><span class="yes">Cr</span><span class="yes">Op</span><span class="yes">Sa</span><span class="yes">Fx</span>
  </p>
  <pre><code><span class="doctype">&lt;!DOCTYPE html&gt;</span>
<span class="tag">&lt;<span class="keyword">html</span>&gt;</span>
 <span class="tag">&lt;<span class="keyword">head</span>&gt;</span>
  <span class="tag">&lt;<span class="keyword">title</span>&gt;</span>canvas<span class="tag">&lt;/<span class="keyword">title</span>&gt;</span>
  <span class="tag">&lt;<span class="keyword">meta</span><span class="attribute"> charset=<span class="value">"utf-8"</span></span>&gt;</span>
  <span class="tag">&lt;<span class="keyword">script</span>&gt;</span><span class="javascript"> 
   window.onload = <span class="function"><span class="keyword">function</span><span class="params">()</span> &#123;</span>
    <span class="keyword">var</span> drawingCanvas = document.getElementById(<span class="string">'smile'</span>);
    <span class="keyword">if</span>(drawingCanvas &amp;&amp; drawingCanvas.getContext) {
     <span class="keyword">var</span> context = drawingCanvas.getContext(<span class="string">'2d'</span>);
     <span class="comment">// Рисуем окружность </span>
     context.strokeStyle = <span class="string">"#000"</span>;
     context.fillStyle = <span class="string">"#fc0"</span>;
     context.beginPath();
     context.arc(<span class="number">100</span>,<span class="number">100</span>,<span class="number">50</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,<span class="literal">true</span>);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// Рисуем левый глаз </span>
     context.fillStyle = <span class="string">"#fff"</span>;
     context.beginPath();
     context.arc(<span class="number">84</span>,<span class="number">90</span>,<span class="number">8</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,<span class="literal">true</span>);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// Рисуем правый глаз </span>
     context.beginPath();
     context.arc(<span class="number">116</span>,<span class="number">90</span>,<span class="number">8</span>,<span class="number">0</span>,Math.PI*<span class="number">2</span>,<span class="literal">true</span>);
     context.closePath();
     context.stroke();
     context.fill();
     <span class="comment">// Рисуем рот</span>
     context.beginPath();
     context.moveTo(<span class="number">70</span>,<span class="number">115</span>);
     context.quadraticCurveTo(<span class="number">100</span>,<span class="number">130</span>,<span class="number">130</span>,<span class="number">115</span>);
     context.quadraticCurveTo(<span class="number">100</span>,<span class="number">150</span>,<span class="number">70</span>,<span class="number">115</span>); 
     context.closePath();
     context.stroke();
     context.fill();
    }
   }
  </span><span class="tag">&lt;/<span class="keyword">script</span>&gt;</span>
 <span class="tag">&lt;/<span class="keyword">head</span>&gt;</span>
 <span class="tag">&lt;<span class="keyword">body</span>&gt;</span>
  <span class="tag">&lt;canvas<span class="attribute"> id=<span class="value">"smile"</span></span><span class="attribute"> width=<span class="value">"200"</span></span><span class="attribute"> height=<span class="value">"200"</span></span>&gt;</span>
    <span class="tag">&lt;<span class="keyword">p</span>&gt;</span>Ваш браузер не поддерживает рисование.<span class="tag">&lt;/<span class="keyword">p</span>&gt;</span>
  <span class="tag">&lt;/canvas&gt;</span>
 <span class="tag">&lt;/<span class="keyword">body</span>&gt;</span>
<span class="tag">&lt;/<span class="keyword">html</span>&gt;</span></code></pre>
  <div class="example-view">
    <img class="example-win" alt="Посмотреть пример" title="Посмотреть в этом окне" src="images/win.gif"><br>
    <img class="example-win" alt="Посмотреть пример" title="Посмотреть в новом окне" src="images/win2.gif"><br>
  </div>
  <p>Результат примера в браузере Opera показан на рис. 1.</p>
  <p class="fig"><img src="images/canvas.png" alt="Вывод рисунка с помощью тега <canvas>" height="299" width="400"></p>
  <p class="figsign">Рис. 1. Вывод рисунка с помощью тега &lt;canvas&gt;</p>
  <div class="field">
    <div class="field-item">
      <a href="#">HTML5</a>
    </div>
    <div class="field-item">
      <a href="#">Изображения</a>
    </div>
  </div>
</div><?php }} ?>
