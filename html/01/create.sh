##sample01.php~sample26.phpまで作成
for i in `seq 1 26`
do
    if [ $i -lt 10 ]; then
        touch sample0$i.php
    else
        touch sample$i.php
    fi
done
