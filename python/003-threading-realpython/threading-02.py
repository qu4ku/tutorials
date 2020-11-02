import logging
import threading 
import time

def thread_function(name):
    logging.info(f'Thread {name}: starting')
    time.sleep(2)
    logging.info(f'Thread {name}: finishing')

if __name__ == '__main__':
    format = "%(asctime)s: %(message)s"
    logging.basicConfig(format=format, level=logging.INFO,
    datefmt="%H:%M:%S")

    threads = []

    for i in range(3):
        logging.info(f'Main  : crate and start thread {i}')
        x = threading.Thread(target=thread_function, args=(i,), daemon=True)
        threads.append(x)
        x.start()
    
    for i, thread in enumerate(threads):
        logging.info(f'Main  : before joining thread {i}')
        thread.join()
        logging.info(f'Main  : thread {i} done')


