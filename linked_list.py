__author__ = "Alex Brown"

from brick_node import brick_node

class brickChain():
    def __init__(self):
        self.list = dict()

    def __size__(self):
        return self.list.__len__()


    def append(self, oldElement: int = 0, element: brick_node = brick_node()) -> int:
        """
        :param oldElement: the hash to the prior element(0 by default, if starting a new brick)
        :param element: the brickNode to be passed in
        :return:
        """
        if(self.__size__() == 0):
            hash = element.hash()
            self.list[hash] = element
            return hash
        else:
            element.link = oldElement
            hash = element.hash()
            self.list[hash] = element
            return hash