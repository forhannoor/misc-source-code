class Stack(list):
    def __init__(self):
        self.storage = []

    def push(self, item):
        self.storage.append(item)

    def pop(self):
        if len(self.storage) > 0:
            return self.storage.pop()

    def is_empty(self):
        if len(self.storage) == 0:
            return True

        return False

    def output(self):
        print self.storage

    def is_balanced(self):
        s = []
        balanced = True
        index = 0

        while(index < len(self.storage) and balanced):
            token = self.storage[index]

            if token in "({[":
                s.append(token)

            else:
                if len(s) == 0:
                    balanced = False

                else:
                    top = s.pop()

                    if not self.matches(top, token):
                        balanced = False

            index += 1

        if balanced and len(s) == 0:
            return True

        else:
            return False

    def matches(self, open, close):
        opens = "({[";
        closes = ")}]";
        return opens.index(open) == closes.index(close)


s = Stack()
f = open('test1.txt', 'r')


while(True):
    c = f.read(1)

    if not c:
        break

    elif(c in "({[" or c in ")}]"):
        s.push(c)

    #print c

f.close()
print "test1.txt is balanced? ", s.is_balanced()

s = Stack()
f = open('test2.txt', 'r')

while(True):
    c = f.read(1)

    if not c:
        break

    elif(c in "({[" or c in ")}]"):
        s.push(c)

f.close()
print "test2.txt is balanced? ", s.is_balanced()

s = Stack()
f = open('test3.txt', 'r')

while(True):
    c = f.read(1)

    if not c:
        break

    elif(c in "({[" or c in ")}]"):
        s.push(c)

f.close()
print "test3.txt is balanced? ", s.is_balanced()