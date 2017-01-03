#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
//#define NULL 0
#define max(a,b) (a>b)?a:b
struct node
{
    int data;
    struct node* left, *right;
};
int c=1;

       
struct node *root,*head;
struct node* insert(struct node *rot,int d){
       
       if(root==NULL && c==1)
       {
                     rot=(struct node*)malloc(sizeof(struct node));
                     head=rot;
                     rot->data=d;
                     rot->left=NULL;
                     rot->right=NULL;
                     c=0;
                     }
                     else if(rot==NULL)
                     {rot=(struct node*)malloc(sizeof(struct node));
                     //head=root;
                     rot->data=d;
                     rot->left=NULL;
                     rot->right=NULL;
                          
                          }
                     else if(d<rot->data)
                     {
                         rot->left= insert(rot->left,d);
                          }
                          else
                          {
                              rot->right=insert(rot->right,d);
                          }
                          printf("%d\n",rot);
                      return rot;
                          
       }
       void inorder(struct node* r)
{
    if(r!=NULL){
        inorder(r->left);
        printf("%d ", r->data);
        inorder(r->right);
    }
}
int nn(struct node *t)
{
    if(t)
    {
         return(1+(nn(t->left))+(nn(t->right)));
}
else
{
    return 0;
}
}
       int h(struct node *t)
       {
           if(t==NULL)
           {
                      return 0;
                      }
                      if((t->left==NULL)&&(t->right==NULL))
                      {
                                                       return 0;
                                                       }
                                                       else
                                                       {
                                                           int l,r;
                                                          // l=h(t->left);
                                                           //r=h(t->right);
                                                           return(max((h(t->left)+1),(h(t->right)+1)));
                                                           }
                                                           }
                                                           int leaf(struct node *t)
                                                           {
                                                               if(t=='\0')
                                                               {
                                                                     return 0;
                                                                     }
                                                                     if((t->left==NULL) && (t->right==NULL))
                                                                     {
                                                                                   return 1;
                                                                                   }
                                                                                   else
                                                                                   {
                                                                                       return(leaf(t->left)+leaf(t->right));
                                                                                   }
                                                           }
int main()
{
    int n,i,d,k;
    root=NULL;
    printf("Number of nodes\n");
    scanf("%d",&n);
    for(i=0;i<n;i++)
    {
                    scanf("%d",&d);
                   root= insert(root,d);
                   printf("%d\n",root);
                    }
                    inorder(root);
                    //h(root);
                    printf("%d\n",h(root));
                    printf("%d\n",nn(root));
                    printf("%d\n",leaf(root));
                    getch();
                    return 0;
                    }
                    
                    

    
