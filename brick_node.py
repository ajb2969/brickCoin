__author__ = "Alex Brown"
import _sha3 as sha

class brick_node(object):

    def __init__(self: 'brick_node', link = None):
        self.data = []
        self.link = None

    def addToData(self,number):
        self.data.append(number)

    def __getData(self):
        tot = 0
        if len(self.data) == 0:
            return str(tot).encode("UTF-8")
        else:
            for i in range(0,len(self.data)):
                tot += self.data[i]
            return str(tot).encode("UTF-8")

    def hash(self):
        m = sha.sha3_512()
        m.update(self.__getData())
        return m.hexdigest() + str(self.__hash__())
