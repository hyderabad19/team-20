from matplotlib import pyplot as plt 

f=open('analytics-data.txt','r')

a=list()
x=f.readline()
while(x!=''):
    #print(x)
    x=x.strip()
    a.append(x.split(','))
    x=f.readline()

x_axis=list()
y_axis=list()
for i in range(len(a)):
    x_axis.append(a[i][0])
    y_axis.append(a[i][1])

plt.xlabel('did') 
# naming the y axis 
plt.ylabel('no. of likes') 
  
# giving a title to my graph 
plt.title('likes distribution')

plt.bar(x_axis,y_axis) 
  
plt.show() 
