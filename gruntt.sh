#kill -9 $(ps -aux | grep -v "grep" | grep grunt | awk '{print $2}');
echo "Magento/luma teması devre dışıdır"
grunt clean:porto;
grunt exec:porto;
grunt less:porto;
grunt watch;
