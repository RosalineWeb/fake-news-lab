import streamlit as st
import pickle

# Load model and vectorizer
model = pickle.load(open("model.pkl", "rb"))
vectorizer = pickle.load(open("vectorizer.pkl", "rb"))

st.title("📰 Fake News Detector")
st.subheader("Enter a news article below:")

text_input = st.text_area("News Content")

if st.button("Check"):
    if text_input:
        transformed = vectorizer.transform([text_input])
        prediction = model.predict(transformed)[0]
        if prediction == 1:
            st.success("✅ This appears to be Real News")
        else:
            st.error("❌ This appears to be Fake News")
