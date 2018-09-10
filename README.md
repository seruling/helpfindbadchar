# helpfindbadchar
helping me to find badchar. does not tell exactly what is the bad char. but by telling where to start as it help to do comparison between what supposed to be in memory and what is the actual from memory as crashed.
  
1. load char set into a.txt, from python code.
  
2. run a.php, output shows what the supposed to be in memory
  
3. crash the app. copy and save into mem.txt  
![alt text](https://raw.githubusercontent.com/seruling/helpfindbadchar/master/mem.png)
  
4. awk -F' ' '{print $2}' mem.txt
  
5. compare output from 2 and 4  
![alt text](https://raw.githubusercontent.com/seruling/helpfindbadchar/master/compare.PNG)

