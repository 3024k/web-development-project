#include<iostream>
using namespace std;

int main()
{
    long long l,h,i,a,b,temp,num;
    while(cin>>l>>h){
        if(l==0&&h==0){
            break;
        }
        if(l>h){
            temp=l;
            l=h;
            h=temp;
        }
        long long max=0,index=0;
        for(i=l;i<=h;i++){
            num=i;
            int count=0;
            while(1){
                count++;

                if(num%2==0){
                    num=num/2;
                }
                else{
                    num=num*3+1;
                }
                if(num==1) break;

            }
            if(max<count){
                max=count;
                index=i;
            }
        }

        cout<<"Between "<<l<<" and "<<h<<", "<<index<<" generates the longest sequence of "<<max<<" values."<<endl;
    }

    return 0;
}
