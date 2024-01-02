def gcd_fun (x, y): 
    if (y == 0):
        return x 
    else:
        return gcd_fun (y, x % y)

def Euler_totient(n): 
    result = 1
    for i in range(2, n):
         if (gcd_fun(i, n) == 1): 
            result+=1
            return result

    for n in range(1, 10):
        print("Euler_totient(",n,") = ",Euler_totient(n), sep = "")

        print("Euler_totient(35) = ",Euler_totient(35), sep = "") 
        print("Euler_totient(37) = ",Euler_totient(37), sep = "")
