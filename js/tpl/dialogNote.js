define(function(){ var tpl={"dialogNote":"<form class=\"noteForm\" id=\"noteForm\"><div class=\"oneLine\">　　教程：<input type=\"text\" id=\"category\" name=\"category\" value=\"\" placeholder=\"例：html\" /></div><div class=\"oneLine\">　　&nbsp;ord：<input type=\"text\" id=\"ord\" name=\"ord\" value=\"\" placeholder=\"排列顺序，大400，中20，小1\" /></div><div class=\"oneLine\">　　&nbsp;pri：<input type=\"text\" id=\"pri\" name=\"pri\" value=\"\" placeholder=\"代表标题级别，例：1,2,3...\" /></div><div class=\"oneLine\">　　标题：<input type=\"text\" id=\"title\" name=\"title\" value=\"\" /></div><div class=\"oneLine\">　副标题：<input type=\"text\" id=\"subTitle\" name=\"sub_title\" value=\"\" /></div><div class=\"oneLine\">文件路径：<input type=\"text\" id=\"docDir\" name=\"doc_dir\" value=\"\" placeholder=\"例：papers/note/html/01html/paper.php\" /></div></form>"}; return tpl['dialogNote'];});