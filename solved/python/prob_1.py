"""
 * Wes Kilgour
 *
 * Problem 1
 * Multiples of 3 or 5
 *
 * https://projecteuler.net/problem=1
"""

print(sum([i for i in range(1, 1000) if i % 3 == 0 or i % 5 == 0]))
