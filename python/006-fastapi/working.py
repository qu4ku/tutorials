from fastapi import FastAPI, Path, Query, HTTPException, status
from typing import Optional
from pydantic import BaseModel



app = FastAPI()

class Item(BaseModel):
	name: str
	price: float
	brand: Optional[str] = None

class UpdateItem(BaseModel):
	name: Optional[str] = None
	price: Optional[float] = None
	brand: Optional[str] = None


inventory = {
	1: {
		'name': 'Milk',
		'price': 3.88,
		'brand': 'Regular',
	}
}

@app.get('/get-item/{item_id}')
def get_item(item_id: int = Path(None, description='The ID of item you want to get.')):
	return inventory[item_id]


# query paramenters
@app.get('/get-by-name')
def get_item_by_name(name: str):
	for item_id in inventory:
		if inventory[item_id]['name'] == name:
			return inventory[item_id]
	raise HTTPException(status_code=404, detail="Item name not found.")


@app.post('/create-item/{item_id}')
def create_item(item_id: int, item: Item):
	if item_id in inventory:
		raise HTTPException(status_code=404, detail="Item ID already exists.")
	
	inventory[item_id] = item
	return inventory[item_id]


@app.put('/update-item/{item_id}')
def update_item(item_id: int, item: Item):
	if item_id not in inventory:
		raise HTTPException(status_code=404, detail="Item ID does not exists.")

	if item.name: 
		inventory[item_id].name = item.name
	
	if item.price: 
		inventory[item_id].price = item.price

	if item.brand: 
		inventory[item_id].brand = item.brand

	return inventory[item_id]
		

@app.delete('/delete-item')
def delete_item(item_id: int = Query(..., description="ID of the element you want to delete.")):
	if item_id not in inventory: 
		raise HTTPException(status_code=404, detail="Item ID does not exists.")

	
	del inventory[item_id]
	return {'Success': 'Item deleted.'}