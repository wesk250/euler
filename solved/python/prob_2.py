"""
 * Wes Kilgour
 *
 * Problem 2
 * Even Fibonacci numbers
 *
 * https://projecteuler.net/problem=2
"""

fibTerms = [0, 1]

while fibTerms[-1] < 4000000:
    newTerm = fibTerms[-1] + fibTerms[-2]

    if newTerm > 4000000:
        break

    fibTerms.append(newTerm)

print(sum([i for i in fibTerms if i % 2 == 0]))
