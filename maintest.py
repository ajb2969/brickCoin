__author__ = 'Alex Brown'

from linked_list import brickChain
from brick_node import brick_node

def execute() -> None:
    """
    Do a bunch of tests. Fairly good coverage.
    """
    lst = brickChain();
    print(lst.__size__())
    brick1 = brick_node(); brick1.addToData(1)
    last = lst.append(brick1);
    brick2 = brick_node(); brick2.addToData(3)
    last = lst.append(last,brick2);
    brick3 = brick_node(); brick3.addToData(8)
    last = lst.append(last,brick3);
    brick4 = brick_node(); brick4.addToData(11)
    last = lst.append(last,brick4);
    print(lst.size)

if __name__ == '__main__':
    execute()
