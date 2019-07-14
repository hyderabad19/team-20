from matplotlib import pyplot as plt 

f=open('anal-time.txt','r')

a=list()
x=f.readline()
while(x!=''):
    #print(x)
    x=x.strip()
    a.append(x.split(','))
    x=f.readline()

x_axis=list()
y_axis=list()
d=dict()
for i in range(len(a)):
    temp1=a[i][1].split(':')
    temp=int(temp1[0])//4
    try:
        
        d[temp]+=1
    except:
        d[temp]=1


for key, value in d.items():
    x_axis.append(key)
    y_axis.append(value)

plt.xlabel('time') 
# naming the y axis 
plt.ylabel('utilization') 
  
# giving a title to my graph 
plt.title('likes distribution')

plt.bar(x_axis,y_axis) 
  
plt.show() 
