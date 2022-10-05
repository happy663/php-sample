for i in `seq 1 26`
do
    if [ $i -lt 10 ]; then
        touch sample02-0$i.php
    else
        touch sample02-$i.php
    fi
done
