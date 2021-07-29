## PHP 當中的 interface 和 abstract ，分別適合於什麼時機使用。請描述對於這兩個保留字的看法。

interface 可以用來定義規格，該物件需要實作哪些規格
abstract 則是該物件的抽象類，用來定義該物件共用的方法

## Laravel 當中的 middleware 能夠在進入 controller 和離開 controller 後提供額外的操作，參考 官方文件 。若換成自己設計類似的 middleware ，請描述一下會如何設計以及設計的做法。

可以使用Chain of Responsibility來實作middleware
