#! bin/bash
mkdir DeltaTask
cd DeltaTask/
for x in `seq 1 1 100`
do
touch file-$x;
cat /dev/urandom | tr -cd 'a-z0-9A-Z' | head -c 16 > file-$x;
truncate -s 10K file-$x;
touch -d "2 days ago" file-$x;
chmod 444 file-$x;
done


