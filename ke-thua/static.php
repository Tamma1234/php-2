
<?php
/**Tính kế thừa
 * Tính kế thừa cho phép một lớp class có thể kề thừa các thuộc tính
 * và phương thức từ các lớp khác đã được định nghĩa
 * Lớp dc kế thừa gọi là lớp cha và lớp kế thừa được gọi là lớp con
 * -Static là gì
 * Là 1 thành phần tĩnh (có thể là 1 thuộc tính hoặc phương thức) mà nó
 * hoạt độgn như 1 biến toàn cục .
 * Khi khai báo phương thức ở dạng STATIC thì bạn sẽ không gọi bằng cách
 * thông thường là dùng từ khóa this được nữa.
 */
    class Animal{
        static function test(){
            $model = new static();
            var_dump($model);
        }
        function total($a,$b){
                return $a+$b;
        }

    }
    class duck extends Animal{}
    class cat extends Animal{}

    duck :: test();
    cat :: test();
?>
