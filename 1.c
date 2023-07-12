int main(void)
{
  int n;

  printf("n = ");
  scanf("%d", &n);

  if( (n & 1) == 0 ){ //条件文に括弧が足りなかったので追加した
    printf("%d は偶数です\n", n);
  } else { //奇数の場合のためのelse文を追加した
    printf("%d は奇数です\n", n);
  }
  return 0;
}
