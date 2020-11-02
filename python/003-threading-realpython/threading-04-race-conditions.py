import logging
import threading 
import time
import concurrent.futures


def thread_function(name):
    logging.info(f'Thread {name}: starting')
    time.sleep(2)
    logging.info(f'Thread {name}: finishing')


class FakeDatabase:
    def __init__(self):
        self.value = 0
    
    def update(self, name):
        logging.info(f'Thread {name}: starting update')
        local_copy = self.value
        local_copy += 1
        time.sleep(.1)
        self.value = local_copy
        logging.info(f'Thread {name}: finishing update')

if __name__ == '__main__':
    format = "%(asctime)s: %(message)s"
    logging.basicConfig(format=format, level=logging.INFO,
    datefmt="%H:%M:%S")

    database = FakeDatabase()
    logging.info(f'Testing update. Starting value is {database.value}')

    with concurrent.futures.ThreadPoolExecutor(max_workers=2) as executor:
        for i in range(4):
            executor.submit(database.update, i)
    logging.info(f'Testing update. Ending value is {database.value}')


