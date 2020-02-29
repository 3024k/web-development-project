#include<iostream>
#include<cmath>
#include<cstdio>
using namespace std;

int main(){

    double ans,p,n;
    while(scanf("%lf %lf",&n,&p)==2){
        ans=pow(p,1/n);
        printf("%.0lf\n",ans);
    }
    return 0;
}
