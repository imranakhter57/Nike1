import tkinter as tk
from selenium import webdriver
from selenium.webdriver.common.keys import Keys


def raise_frame(frame):
    frame.tkraise()

root = tk.Tk()

f1 = tk.Frame(root)
f2 = tk.Frame(root)
f3 = tk.Frame(root)
f4 = tk.Frame(root)
driver = webdriver.Chrome()
for frame in (f1, f2, f3, f4):
    frame.grid(row=0, column=0, sticky='news')
def create_login():        
    driver.get("https://www.google.com")
    #driver.quit()
    raise_frame(f2)


def facebook():
    driver.find_element_by_xpath('//*[@id="lst-ib"]').send_keys("Facebook")
    
tk.Label(f1,text="Login ID").grid(row=0,column=0, columnspan=2, padx=10,pady=10,sticky='W')
tk.Entry(f1).grid(row=0,column=2, columnspan=2, padx=10,pady=10,sticky='E')
tk.Label(f1,text="Password").grid(row=1,column=0, columnspan=2, padx=10,pady=10,sticky='W')
tk.Entry(f1,show='*').grid(row=1,column=2, columnspan=2, padx=10,pady=10,sticky='E')
tk.Button(f1,text="Login",command=create_login).grid(row=2,column=0,columnspan=2,padx=10,pady=(0,10))
tk.Button(f1,text="Quit",command=root.destroy).grid(row=2,column=2,columnspan=2,padx=10,pady=(0,10))

tk.Label(f2,text="Login LID").grid(row=0,column=0, columnspan=2, padx=10,pady=10,sticky='W')
tk.Entry(f2).grid(row=0,column=2, columnspan=2, padx=10,pady=10,sticky='E')
tk.Label(f2,text="Password12").grid(row=1,column=0, columnspan=2, padx=10,pady=10,sticky='W')
tk.Entry(f2,show='*').grid(row=1,column=2, columnspan=2, padx=10,pady=10,sticky='E')
tk.Button(f2,text="Login2324",command=facebook).grid(row=2,column=0,columnspan=2,padx=10,pady=(0,10))
tk.Button(f2,text="Quit21312",command=root.destroy).grid(row=2,column=2,columnspan=2,padx=10,pady=(0,10))



raise_frame(f1)
root.mainloop()

